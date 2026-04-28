<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponseBody\result\memory;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\SearchMemoryResponseBody\result\skill;

class result extends Model
{
    /**
     * @var memory
     */
    public $memory;

    /**
     * @var skill
     */
    public $skill;
    protected $_name = [
        'memory' => 'memory',
        'skill' => 'skill',
    ];

    public function validate()
    {
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        if (null !== $this->skill) {
            $this->skill->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memory) {
            $res['memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->skill) {
            $res['skill'] = null !== $this->skill ? $this->skill->toArray($noStream) : $this->skill;
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
        if (isset($map['memory'])) {
            $model->memory = memory::fromMap($map['memory']);
        }

        if (isset($map['skill'])) {
            $model->skill = skill::fromMap($map['skill']);
        }

        return $model;
    }
}
