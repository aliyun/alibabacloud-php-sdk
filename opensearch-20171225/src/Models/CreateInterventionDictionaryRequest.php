<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateInterventionDictionaryRequest extends Model
{
    /**
     * @description The type of the analyzer. Valid values:
     *
     *   MODEL: model-based custom analyzer.
     *   SYSTEM: system analyzer.
     *   USER: custom analyzer.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $analyzerType;

    /**
     * @description The name of the intervention dictionary.
     *
     * @example ner_dict_ec
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the intervention dictionary. Valid values:
     *
     *   stopword: an intervention dictionary for stop word filtering.
     *   synonym: an intervention dictionary for synonym configuration.
     *   correction: an intervention dictionary for spelling correction.
     *   category_prediction: an intervention dictionary for category prediction.
     *   ner: an intervention dictionary for named entity recognition (NER).
     *   term_weighting: an intervention dictionary for term weight analysis.
     *   suggest_allowlist: a drop-down suggestion whitelist.
     *   suggest_denylist: a drop-down suggestion blacklist.
     *   hot_allowlist: a top search whitelist.
     *   hot_denylist: a top search blacklist.
     *   hint_allowlist: a hint whitelist.
     *   hint_denylist: a hint blacklist.
     *
     * @example ner
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Default value: false.
     *
     * Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'name'         => 'name',
        'type'         => 'type',
        'dryRun'       => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInterventionDictionaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
