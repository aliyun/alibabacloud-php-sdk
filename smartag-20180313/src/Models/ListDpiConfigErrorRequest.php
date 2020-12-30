<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ListDpiConfigErrorRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $dpiConfigType;

    /**
     * @var string
     */
    public $ruleInstanceId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'regionId'       => 'RegionId',
        'smartAGId'      => 'SmartAGId',
        'dpiConfigType'  => 'DpiConfigType',
        'ruleInstanceId' => 'RuleInstanceId',
        'nextToken'      => 'NextToken',
        'maxResults'     => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->dpiConfigType) {
            $res['DpiConfigType'] = $this->dpiConfigType;
        }
        if (null !== $this->ruleInstanceId) {
            $res['RuleInstanceId'] = $this->ruleInstanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDpiConfigErrorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['DpiConfigType'])) {
            $model->dpiConfigType = $map['DpiConfigType'];
        }
        if (isset($map['RuleInstanceId'])) {
            $model->ruleInstanceId = $map['RuleInstanceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
