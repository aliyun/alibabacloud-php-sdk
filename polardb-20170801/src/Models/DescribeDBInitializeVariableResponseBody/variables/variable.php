<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;

use AlibabaCloud\Tea\Model;

class variable extends Model
{
    /**
     * @description The character set that is supported.
     *
     * @example EUC_CN
     *
     * @var string
     */
    public $charset;

    /**
     * @description The language that indicates the collation of the databases that are created.
     *
     * >- The language must be compatible with the character set that is specified by **CharacterSetName**.
     * >- This parameter is optional for PolarDB for MySQL clusters.
     *
     * To view the valid values for this parameter, perform the following steps: Log on to the PolarDB console and click the ID of a cluster. In the left-side navigation pane, choose **Settings and Management** > **Databases**. Then, click **Create Database**.
     * @example C
     *
     * @var string
     */
    public $collate;

    /**
     * @description The language that indicates the character type of the database.
     *
     * >- The language must be compatible with the character set that is specified by **CharacterSetName**.
     * >- The specified value must be the same as the value of **Collate**.
     * >- This parameter is optional for PolarDB for MySQL clusters.
     *
     * To view the valid values for this parameter, perform the following steps: Log on to the PolarDB console and click the ID of a cluster. In the left-side navigation pane, choose **Settings and Management** > **Databases**. Then, click **Create Database**.
     * @example C
     *
     * @var string
     */
    public $ctype;
    protected $_name = [
        'charset' => 'Charset',
        'collate' => 'Collate',
        'ctype'   => 'Ctype',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }
        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }
        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }

        return $model;
    }
}
