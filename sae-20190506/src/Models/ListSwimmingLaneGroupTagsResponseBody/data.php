<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSwimmingLaneGroupTagsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"version":"1.0.0","owner":"team-a"}
     *
     * @var string
     */
    public $metadata;

    /**
     * @example {"alicloud.service.tag":"g1"}
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'metadata' => 'Metadata',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
