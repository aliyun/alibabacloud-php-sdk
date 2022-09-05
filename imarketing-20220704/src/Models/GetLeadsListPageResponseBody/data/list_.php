<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetLeadsListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var int
     */
    public $contentId;

    /**
     * @var int
     */
    public $creativeId;

    /**
     * @var string
     */
    public $creativeName;

    /**
     * @var string
     */
    public $leadsDetail;

    /**
     * @var int
     */
    public $serialId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'componentId'  => 'ComponentId',
        'contentId'    => 'ContentId',
        'creativeId'   => 'CreativeId',
        'creativeName' => 'CreativeName',
        'leadsDetail'  => 'LeadsDetail',
        'serialId'     => 'SerialId',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->creativeId) {
            $res['CreativeId'] = $this->creativeId;
        }
        if (null !== $this->creativeName) {
            $res['CreativeName'] = $this->creativeName;
        }
        if (null !== $this->leadsDetail) {
            $res['LeadsDetail'] = $this->leadsDetail;
        }
        if (null !== $this->serialId) {
            $res['SerialId'] = $this->serialId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['CreativeId'])) {
            $model->creativeId = $map['CreativeId'];
        }
        if (isset($map['CreativeName'])) {
            $model->creativeName = $map['CreativeName'];
        }
        if (isset($map['LeadsDetail'])) {
            $model->leadsDetail = $map['LeadsDetail'];
        }
        if (isset($map['SerialId'])) {
            $model->serialId = $map['SerialId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
