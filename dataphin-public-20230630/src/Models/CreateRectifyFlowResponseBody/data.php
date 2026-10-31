<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRectifyFlowResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $processedIssueCount;

    /**
     * @var int[]
     */
    public $rectifyIds;
    protected $_name = [
        'processedIssueCount' => 'ProcessedIssueCount',
        'rectifyIds' => 'RectifyIds',
    ];

    public function validate()
    {
        if (\is_array($this->rectifyIds)) {
            Model::validateArray($this->rectifyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processedIssueCount) {
            $res['ProcessedIssueCount'] = $this->processedIssueCount;
        }

        if (null !== $this->rectifyIds) {
            if (\is_array($this->rectifyIds)) {
                $res['RectifyIds'] = [];
                $n1 = 0;
                foreach ($this->rectifyIds as $item1) {
                    $res['RectifyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ProcessedIssueCount'])) {
            $model->processedIssueCount = $map['ProcessedIssueCount'];
        }

        if (isset($map['RectifyIds'])) {
            if (!empty($map['RectifyIds'])) {
                $model->rectifyIds = [];
                $n1 = 0;
                foreach ($map['RectifyIds'] as $item1) {
                    $model->rectifyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
