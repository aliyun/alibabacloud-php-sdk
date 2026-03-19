<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEventRecordsResponseBody\result\result\showContent;

use AlibabaCloud\Dara\Model;

class actionSuggest extends Model
{
    /**
     * @var string[]
     */
    public $suggestActions;

    /**
     * @var string
     */
    public $suggestText;

    /**
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'suggestActions' => 'suggestActions',
        'suggestText' => 'suggestText',
        'suggestType' => 'suggestType',
    ];

    public function validate()
    {
        if (\is_array($this->suggestActions)) {
            Model::validateArray($this->suggestActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->suggestActions) {
            if (\is_array($this->suggestActions)) {
                $res['suggestActions'] = [];
                $n1 = 0;
                foreach ($this->suggestActions as $item1) {
                    $res['suggestActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestText) {
            $res['suggestText'] = $this->suggestText;
        }

        if (null !== $this->suggestType) {
            $res['suggestType'] = $this->suggestType;
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
        if (isset($map['suggestActions'])) {
            if (!empty($map['suggestActions'])) {
                $model->suggestActions = [];
                $n1 = 0;
                foreach ($map['suggestActions'] as $item1) {
                    $model->suggestActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['suggestText'])) {
            $model->suggestText = $map['suggestText'];
        }

        if (isset($map['suggestType'])) {
            $model->suggestType = $map['suggestType'];
        }

        return $model;
    }
}
