<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest;

use AlibabaCloud\Tea\Model;

class rows extends Model
{
    /**
     * @example doca-1234
     *
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'id'       => 'Id',
        'metadata' => 'Metadata',
        'vector'   => 'Vector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->vector) {
            $res['Vector'] = $this->vector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = $map['Vector'];
            }
        }

        return $model;
    }
}
