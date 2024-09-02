<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The custom analyzer.
     *
     * @example dianshang
     *
     * @var string
     */
    public $analyzer;

    /**
     * @description The time when the test scenario was created.
     *
     * @example 1591086323
     *
     * @var string
     */
    public $created;

    /**
     * @description The name of the test group.
     *
     * @example testb
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the intervention dictionary. Valid values:
     *
     *   stopword: an intervention dictionary for stop word filtering
     *   synonym: an intervention dictionary for synonym configuration
     *   correction: an intervention dictionary for spelling correction
     *   category_prediction: an intervention dictionary for category prediction
     *   ner: an intervention dictionary for named entity recognition (NER)
     *   term_weighting: an intervention dictionary for term weight analysis
     *
     * @example ner
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the intervention dictionary was last updated.
     *
     * @example 1591086323
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'analyzer' => 'analyzer',
        'created'  => 'created',
        'name'     => 'name',
        'type'     => 'type',
        'updated'  => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzer) {
            $res['analyzer'] = $this->analyzer;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['analyzer'])) {
            $model->analyzer = $map['analyzer'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
