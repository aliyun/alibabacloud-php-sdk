<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserIPSWhitelistRequest extends Model
{
    /**
     * @var int
     */
    public $direction;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $listType;

    /**
     * @var string
     */
    public $listValue;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $whiteType;
    protected $_name = [
        'direction' => 'Direction',
        'ipVersion' => 'IpVersion',
        'lang'      => 'Lang',
        'listType'  => 'ListType',
        'listValue' => 'ListValue',
        'sourceIp'  => 'SourceIp',
        'whiteType' => 'WhiteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }
        if (null !== $this->listValue) {
            $res['ListValue'] = $this->listValue;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->whiteType) {
            $res['WhiteType'] = $this->whiteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserIPSWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }
        if (isset($map['ListValue'])) {
            $model->listValue = $map['ListValue'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['WhiteType'])) {
            $model->whiteType = $map['WhiteType'];
        }

        return $model;
    }
}
