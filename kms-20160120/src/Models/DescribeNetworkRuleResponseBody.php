<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DescribeNetworkRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourcePrivateIp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'arn' => 'Arn',
        'description' => 'Description',
        'requestId' => 'RequestId',
        'sourcePrivateIp' => 'SourcePrivateIp',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
