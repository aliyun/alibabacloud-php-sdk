<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateCrawlerRequest;

use AlibabaCloud\Dara\Model;

class scheduleConfig extends Model
{
    /**
     * @var string
     */
    public $cronExpress;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cronExpress' => 'CronExpress',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
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
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
