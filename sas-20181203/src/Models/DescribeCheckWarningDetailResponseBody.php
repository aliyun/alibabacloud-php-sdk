<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckWarningDetailResponseBody extends Model
{
    /**
     * @description Queries the details about a specified check item.
     *
     * @example You can fix it in the following ways:↵1. To configure authentication for redis service, click the redis.conf Configure complex password in requirepass, and then restart redis.↵2. In redis configuration file redis.conf The configuration is as follows: bind 127.0.0.1, only allow local access, and then restart redis
     *
     * @var string
     */
    public $advice;

    /**
     * @example 946
     *
     * @var int
     */
    public $checkId;

    /**
     * @example The redis port is open to the outside world and there is no authentication option configured. In addition to directly obtaining all the information in the database, unauthorized users can also attack the system through unauthorized access vulnerability.
     *
     * @var string
     */
    public $description;

    /**
     * @example Redis unauthorized access
     *
     * @var string
     */
    public $item;

    /**
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @example weak passwords (username@host/password):root@****\/12***
     *
     * @var string
     */
    public $prompt;

    /**
     * @example BE120DAB-F4E7-4C53-ADC3-A97578ABF384
     *
     * @var string
     */
    public $requestId;

    /**
     * @description DescribeCheckWarningDetail
     *
     * @example Security audit
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'advice'      => 'Advice',
        'checkId'     => 'CheckId',
        'description' => 'Description',
        'item'        => 'Item',
        'level'       => 'Level',
        'prompt'      => 'Prompt',
        'requestId'   => 'RequestId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
