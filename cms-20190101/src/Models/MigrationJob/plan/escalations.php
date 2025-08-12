<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Dara\Model;

class escalations extends Model
{
    /**
     * @var escalations\escalations[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'escalations' => 'Escalations',
        'name' => 'Name',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->escalations)) {
            Model::validateArray($this->escalations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalations) {
            if (\is_array($this->escalations)) {
                $res['Escalations'] = [];
                $n1 = 0;
                foreach ($this->escalations as $item1) {
                    $res['Escalations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Escalations'])) {
            if (!empty($map['Escalations'])) {
                $model->escalations = [];
                $n1 = 0;
                foreach ($map['Escalations'] as $item1) {
                    $model->escalations[$n1] = escalations\escalations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
