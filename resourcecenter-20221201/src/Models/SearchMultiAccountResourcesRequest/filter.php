<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchMultiAccountResourcesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The key of the filter condition. For more information, see `Supported filter parameters`.
     *
     * @example ResourceGroupId
     *
     * @var string
     */
    public $key;

    /**
     * @description The matching mode.
     *
     * The value Equals indicates an equal match.
     * @example Equals
     *
     * @var string
     */
    public $matchType;

    /**
     * @description The values of the filter condition.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key'       => 'Key',
        'matchType' => 'MatchType',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
