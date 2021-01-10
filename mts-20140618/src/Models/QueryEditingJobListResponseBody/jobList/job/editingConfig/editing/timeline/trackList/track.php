<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\trackList\track\clips;
use AlibabaCloud\Tea\Model;

class track extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $id;

    /**
     * @var clips
     */
    public $clips;
    protected $_name = [
        'type'  => 'Type',
        'order' => 'Order',
        'id'    => 'Id',
        'clips' => 'Clips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clips) {
            $res['Clips'] = null !== $this->clips ? $this->clips->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return track
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Clips'])) {
            $model->clips = clips::fromMap($map['Clips']);
        }

        return $model;
    }
}
