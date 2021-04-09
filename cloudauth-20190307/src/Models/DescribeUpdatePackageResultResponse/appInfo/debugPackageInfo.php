<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse\appInfo;

use AlibabaCloud\Tea\Model;

class debugPackageInfo extends Model
{
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'version' => 'Version',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return debugPackageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
