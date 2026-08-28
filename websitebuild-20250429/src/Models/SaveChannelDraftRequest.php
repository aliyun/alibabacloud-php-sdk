<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SaveChannelDraftRequest\coverImages;

class SaveChannelDraftRequest extends Model
{
    /**
     * @var string
     */
    public $adaptedContent;

    /**
     * @var string
     */
    public $adaptedTitle;

    /**
     * @var coverImages[]
     */
    public $coverImages;

    /**
     * @var string
     */
    public $draftId;
    protected $_name = [
        'adaptedContent' => 'AdaptedContent',
        'adaptedTitle' => 'AdaptedTitle',
        'coverImages' => 'CoverImages',
        'draftId' => 'DraftId',
    ];

    public function validate()
    {
        if (\is_array($this->coverImages)) {
            Model::validateArray($this->coverImages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptedContent) {
            $res['AdaptedContent'] = $this->adaptedContent;
        }

        if (null !== $this->adaptedTitle) {
            $res['AdaptedTitle'] = $this->adaptedTitle;
        }

        if (null !== $this->coverImages) {
            if (\is_array($this->coverImages)) {
                $res['CoverImages'] = [];
                $n1 = 0;
                foreach ($this->coverImages as $item1) {
                    $res['CoverImages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
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
        if (isset($map['AdaptedContent'])) {
            $model->adaptedContent = $map['AdaptedContent'];
        }

        if (isset($map['AdaptedTitle'])) {
            $model->adaptedTitle = $map['AdaptedTitle'];
        }

        if (isset($map['CoverImages'])) {
            if (!empty($map['CoverImages'])) {
                $model->coverImages = [];
                $n1 = 0;
                foreach ($map['CoverImages'] as $item1) {
                    $model->coverImages[$n1] = coverImages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        return $model;
    }
}
