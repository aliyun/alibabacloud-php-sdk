<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody\silencePolicy\matchingRules;
use AlibabaCloud\Tea\Model;

class silencePolicy extends Model
{
    /**
     * @description The ID of the silence policy.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description A list of matching rules.
     *
     * @var matchingRules[]
     */
    public $matchingRules;

    /**
     * @description The name of the silence policy.
     *
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'            => 'Id',
        'matchingRules' => 'MatchingRules',
        'name'          => 'Name',
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
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = [];
            if (null !== $this->matchingRules && \is_array($this->matchingRules)) {
                $n = 0;
                foreach ($this->matchingRules as $item) {
                    $res['MatchingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return silencePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchingRules'])) {
            if (!empty($map['MatchingRules'])) {
                $model->matchingRules = [];
                $n                    = 0;
                foreach ($map['MatchingRules'] as $item) {
                    $model->matchingRules[$n++] = null !== $item ? matchingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
