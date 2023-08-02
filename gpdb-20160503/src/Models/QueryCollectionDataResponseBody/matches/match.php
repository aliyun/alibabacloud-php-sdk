<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\values;
use AlibabaCloud\Tea\Model;

class match extends Model
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
     * @var float
     */
    public $similarity;

    /**
     * @var values
     */
    public $values;
    protected $_name = [
        'id'         => 'Id',
        'metadata'   => 'Metadata',
        'similarity' => 'Similarity',
        'values'     => 'Values',
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
        if (null !== $this->similarity) {
            $res['Similarity'] = $this->similarity;
        }
        if (null !== $this->values) {
            $res['Values'] = null !== $this->values ? $this->values->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return match
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
        if (isset($map['Similarity'])) {
            $model->similarity = $map['Similarity'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
