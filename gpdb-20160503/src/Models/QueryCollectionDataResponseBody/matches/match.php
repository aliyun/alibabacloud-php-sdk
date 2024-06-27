<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\values;
use AlibabaCloud\Tea\Model;

class match extends Model
{
    /**
     * @description The unique ID of the vector data.
     *
     * @example doca-1234
     *
     * @var string
     */
    public $id;

    /**
     * @description The metadata.
     *
     * @var string[]
     */
    public $metadata;

    /**
     * @description The similarity score of the data. It is related to the `l2, ip, or cosine` algorithm that is specified when you create an index.
     *
     * @example 0.12345
     *
     * @var float
     */
    public $score;

    /**
     * @description The retrieved vector data.
     *
     * @var values
     */
    public $values;
    protected $_name = [
        'id'       => 'Id',
        'metadata' => 'Metadata',
        'score'    => 'Score',
        'values'   => 'Values',
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
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Values'])) {
            $model->values = values::fromMap($map['Values']);
        }

        return $model;
    }
}
