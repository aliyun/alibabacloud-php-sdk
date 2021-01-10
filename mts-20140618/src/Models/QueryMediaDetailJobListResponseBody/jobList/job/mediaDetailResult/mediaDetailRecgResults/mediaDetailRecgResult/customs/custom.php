<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\customs;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\customs\custom\clips;
use AlibabaCloud\Tea\Model;

class custom extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var clips
     */
    public $clips;
    protected $_name = [
        'name'  => 'Name',
        'clips' => 'Clips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clips) {
            $res['Clips'] = null !== $this->clips ? $this->clips->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return custom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Clips'])) {
            $model->clips = clips::fromMap($map['Clips']);
        }

        return $model;
    }
}
