<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeInterventionDictionaryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $analyzer;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'created'  => 'created',
        'type'     => 'type',
        'analyzer' => 'analyzer',
        'updated'  => 'updated',
        'name'     => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->analyzer) {
            $res['analyzer'] = $this->analyzer;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['analyzer'])) {
            $model->analyzer = $map['analyzer'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
