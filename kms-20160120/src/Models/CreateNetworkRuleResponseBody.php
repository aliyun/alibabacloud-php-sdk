<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkRuleResponseBody extends Model
{
    /**
     * @description The ARN of the access control rule.
     *
     * @example acs:kms:cn-hangzhou:119285303511****:network/networkrule_test
     *
     * @var string
     */
    public $arn;

    /**
     * @description The description.
     *
     * @example networkrule description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the access control rule.
     *
     * @example networkrule_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 3bf02f7a-015b-4f93-be0f-cc043fda2dd3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The private IP address or private CIDR block.
     *
     * @example ["192.10.XX.XX","192.168.XX.XX/24"]
     *
     * @var string
     */
    public $sourcePrivateIp;

    /**
     * @description The network type.
     *
     * @example Private
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'arn'             => 'Arn',
        'description'     => 'Description',
        'name'            => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return CreateNetworkRuleResponseBody
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
