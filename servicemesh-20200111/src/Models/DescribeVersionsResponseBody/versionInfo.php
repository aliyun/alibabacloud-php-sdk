<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versionInfo extends Model
{
    /**
     * @description The edition of the ASM instance. Valid values:
     *
     *   `Default`: Standard Edition
     *   `Pro`: Professional Edition that is commercially released
     *
     * @example Default
     *
     * @var string
     */
    public $edition;

    /**
     * @description The list of ASM versions available for the ASM instance of the current edition.
     *
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'edition'  => 'Edition',
        'versions' => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = $map['Versions'];
            }
        }

        return $model;
    }
}
