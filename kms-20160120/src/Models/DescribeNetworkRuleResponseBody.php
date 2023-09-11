<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkRuleResponseBody extends Model
{
    /**
     * @example acs:kms:cn-hangzhou:119285303511****:network/networkrule_test
     *
     * @var string
     */
    public $arn;

    /**
     * @example Creat by kst-hzz62ee817bvyyr5****
     *
     * @var string
     */
    public $description;

    /**
     * @example 3bf02f7a-015b-4f93-be0f-cc043fda2d33
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ["192.10.XX.XX","192.168.XX.XX/24"]
     *
     * @var string
     */
    public $sourcePrivateIp;

    /**
     * @example Private
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'arn'             => 'Arn',
        'description'     => 'Description',
        'requestId'       => 'RequestId',
        'sourcePrivateIp' => 'SourcePrivateIp',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourcePrivateIp) {
            $res['SourcePrivateIp'] = $this->sourcePrivateIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourcePrivateIp'])) {
            $model->sourcePrivateIp = $map['SourcePrivateIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
