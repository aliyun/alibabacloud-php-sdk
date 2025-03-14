<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteBaselineCheckWhiteRecordRequest extends Model
{
    /**
     * @description The IDs of check items.
     *
     * @var int[]
     */
    public $checkIds;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The IDs of the whitelist records.
     *
     * @var int[]
     */
    public $recordIds;

    /**
     * @description The data source. Valid values:
     *
     *   **default**: host baseline
     *   **agentless**: agentless detection
     *
     * @example agentless
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'lang' => 'Lang',
        'recordIds' => 'RecordIds',
        'source' => 'Source',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recordIds) {
            $res['RecordIds'] = $this->recordIds;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBaselineCheckWhiteRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = $map['RecordIds'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
