<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsTemplatesResponseBody\data\flashSmsTemplates;

class data extends Model
{
    /**
     * @var flashSmsTemplates[]
     */
    public $flashSmsTemplates;

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
        'flashSmsTemplates' => 'FlashSmsTemplates',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->flashSmsTemplates)) {
            Model::validateArray($this->flashSmsTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flashSmsTemplates) {
            if (\is_array($this->flashSmsTemplates)) {
                $res['FlashSmsTemplates'] = [];
                $n1 = 0;
                foreach ($this->flashSmsTemplates as $item1) {
                    $res['FlashSmsTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FlashSmsTemplates'])) {
            if (!empty($map['FlashSmsTemplates'])) {
                $model->flashSmsTemplates = [];
                $n1 = 0;
                foreach ($map['FlashSmsTemplates'] as $item1) {
                    $model->flashSmsTemplates[$n1] = flashSmsTemplates::fromMap($item1);
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
