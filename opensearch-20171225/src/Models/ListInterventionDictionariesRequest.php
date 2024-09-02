<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListInterventionDictionariesRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
     * @example ["synonym"]
     *
     * @var string
     */
    public $types;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'types'      => 'types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterventionDictionariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        return $model;
    }
}
