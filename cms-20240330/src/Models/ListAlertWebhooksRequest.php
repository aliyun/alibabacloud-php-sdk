<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListAlertWebhooksRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $webhookIds;
    protected $_name = [
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'webhookIds' => 'webhookIds',
    ];

    public function validate()
    {
        if (\is_array($this->webhookIds)) {
            Model::validateArray($this->webhookIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->webhookIds) {
            if (\is_array($this->webhookIds)) {
                $res['webhookIds'] = [];
                $n1 = 0;
                foreach ($this->webhookIds as $item1) {
                    $res['webhookIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['webhookIds'])) {
            if (!empty($map['webhookIds'])) {
                $model->webhookIds = [];
                $n1 = 0;
                foreach ($map['webhookIds'] as $item1) {
                    $model->webhookIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
