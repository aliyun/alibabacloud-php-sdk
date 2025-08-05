<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSignatureLibVersionResponseBody;

use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @description The type.
     *
     * Valid values:
     *
     *   ips
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * Basic Rules and Virtual Patching
     *
     * <!-- -->
     *
     * .
     *
     *   intelligence
     *
     * <!-- -->
     *
     * :
     *
     * <!-- -->
     *
     * Threat Intelligence
     *
     * <!-- -->
     *
     * @example ips
     *
     * @var string
     */
    public $type;

    /**
     * @description Update time.
     *
     * @example 1741067915
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The version number.
     *
     * @example IPS-2307-02
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
