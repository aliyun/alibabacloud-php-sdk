<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListLlmAccessProfilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListLlmAccessProfilesResponseBody\data\llmAccessProfiles;

class data extends Model
{
    /**
     * @var llmAccessProfiles[]
     */
    public $llmAccessProfiles;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'llmAccessProfiles' => 'LlmAccessProfiles',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->llmAccessProfiles)) {
            Model::validateArray($this->llmAccessProfiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmAccessProfiles) {
            if (\is_array($this->llmAccessProfiles)) {
                $res['LlmAccessProfiles'] = [];
                $n1 = 0;
                foreach ($this->llmAccessProfiles as $item1) {
                    $res['LlmAccessProfiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['LlmAccessProfiles'])) {
            if (!empty($map['LlmAccessProfiles'])) {
                $model->llmAccessProfiles = [];
                $n1 = 0;
                foreach ($map['LlmAccessProfiles'] as $item1) {
                    $model->llmAccessProfiles[$n1] = llmAccessProfiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
