<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan;

use AlibabaCloud\Tea\Model;

class escalations extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations\escalations[]
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
        'name'        => 'Name',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = [];
            if (null !== $this->escalations && \is_array($this->escalations)) {
                $n = 0;
                foreach ($this->escalations as $item) {
                    $res['Escalations'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return escalations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            if (!empty($map['Escalations'])) {
                $model->escalations = [];
                $n                  = 0;
                foreach ($map['Escalations'] as $item) {
                    $model->escalations[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\plan\escalations\escalations::fromMap($item) : $item;
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
