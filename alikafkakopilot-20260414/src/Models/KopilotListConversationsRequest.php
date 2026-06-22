<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class KopilotListConversationsRequest extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'page' => 'Page',
        'regionId' => 'RegionId',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
