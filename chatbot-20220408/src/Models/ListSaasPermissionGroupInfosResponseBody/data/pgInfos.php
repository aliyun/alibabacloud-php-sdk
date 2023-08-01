<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody\data;

use AlibabaCloud\Tea\Model;

class pgInfos extends Model
{
    /**
     * @example FAQ
     *
     * @var string
     */
    public $pgCode;

    /**
     * @example FAQ
     *
     * @var string
     */
    public $pgEnName;

    /**
     * @var string
     */
    public $pgName;
    protected $_name = [
        'pgCode'   => 'PgCode',
        'pgEnName' => 'PgEnName',
        'pgName'   => 'PgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pgCode) {
            $res['PgCode'] = $this->pgCode;
        }
        if (null !== $this->pgEnName) {
            $res['PgEnName'] = $this->pgEnName;
        }
        if (null !== $this->pgName) {
            $res['PgName'] = $this->pgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pgInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PgCode'])) {
            $model->pgCode = $map['PgCode'];
        }
        if (isset($map['PgEnName'])) {
            $model->pgEnName = $map['PgEnName'];
        }
        if (isset($map['PgName'])) {
            $model->pgName = $map['PgName'];
        }

        return $model;
    }
}
