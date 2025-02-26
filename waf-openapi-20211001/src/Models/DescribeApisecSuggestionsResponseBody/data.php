<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecSuggestionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiFormat;
    /**
     * @var string
     */
    public $matchedHost;
    /**
     * @var string
     */
    public $suggestId;
    /**
     * @var string
     */
    public $suggestRule;
    /**
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'apiFormat'   => 'ApiFormat',
        'matchedHost' => 'MatchedHost',
        'suggestId'   => 'SuggestId',
        'suggestRule' => 'SuggestRule',
        'suggestType' => 'SuggestType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->suggestId) {
            $res['SuggestId'] = $this->suggestId;
        }

        if (null !== $this->suggestRule) {
            $res['SuggestRule'] = $this->suggestRule;
        }

        if (null !== $this->suggestType) {
            $res['SuggestType'] = $this->suggestType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['SuggestId'])) {
            $model->suggestId = $map['SuggestId'];
        }

        if (isset($map['SuggestRule'])) {
            $model->suggestRule = $map['SuggestRule'];
        }

        if (isset($map['SuggestType'])) {
            $model->suggestType = $map['SuggestType'];
        }

        return $model;
    }
}
