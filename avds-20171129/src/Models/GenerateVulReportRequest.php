<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class GenerateVulReportRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'format'          => 'format',
        'lang'            => 'lang',
        'taskIds'         => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVulReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }

        return $model;
    }
}
