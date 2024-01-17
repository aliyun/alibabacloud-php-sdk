<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListGeneratedContentsRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example media
     *
     * @var string
     */
    public $contentDomain;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'contentDomain' => 'ContentDomain',
        'current'       => 'Current',
        'endTime'       => 'EndTime',
        'size'          => 'Size',
        'startTime'     => 'StartTime',
        'title'         => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->contentDomain) {
            $res['ContentDomain'] = $this->contentDomain;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGeneratedContentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ContentDomain'])) {
            $model->contentDomain = $map['ContentDomain'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
