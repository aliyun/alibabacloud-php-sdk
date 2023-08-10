<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryResponseBody\result;
use AlibabaCloud\Tea\Model;

class CreateInterventionDictionaryResponseBody extends Model
{
    /**
     * @description The type of the intervention dictionary. Valid values:
     *
     *   stopword: an intervention dictionary for stop word filtering
     *   synonym: an intervention dictionary for synonym configuration
     *   correction: an intervention dictionary for spelling correction
     *   category_prediction: an intervention dictionary for category prediction
     *   ner: an intervention dictionary for named entity recognition (NER)
     *   term_weighting: an intervention dictionary for term weight analysis
     *   suggest_allowlist: a drop-down suggestion whitelist
     *   suggest_denylist: a drop-down suggestion blacklist
     *   hot_allowlist: a top search whitelist
     *   hot_denylist: a top search blacklist
     *   hint_allowlist: a shading whitelist
     *   hint_denylist: a shading blacklist
     *
     * @example 80326EFE-485F-46E7-B291-5A1DD08D2198
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request.
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInterventionDictionaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        return $model;
    }
}
