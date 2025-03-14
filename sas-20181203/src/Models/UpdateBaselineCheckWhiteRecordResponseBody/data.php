<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateBaselineCheckWhiteRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 92
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The reason why the check item is added to the whitelist.
     *
     * @example Test
     *
     * @var string
     */
    public $reason;

    /**
     * @description The ID of the whitelist record.
     *
     * @example 1582
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The data source. Valid values:
     *
     *   **default**: server
     *   **agentless**: agentless detection
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @description The object that is added to the whitelist.
     *
     * @example HOST_BASELINE_WHITE_LIST_23
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the assets on which the whitelist rule takes effect. Valid values:
     *
     *   **all_instance**: all servers
     *   **instance**: specific servers
     *
     * @example instance
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'checkId' => 'CheckId',
        'lang' => 'Lang',
        'reason' => 'Reason',
        'recordId' => 'RecordId',
        'source' => 'Source',
        'target' => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
