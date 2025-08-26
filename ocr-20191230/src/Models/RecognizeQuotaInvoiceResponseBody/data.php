<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data\content;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponseBody\data\keyValueInfos;

class data extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var content
     */
    public $content;

    /**
     * @var int
     */
    public $height;

    /**
     * @var keyValueInfos[]
     */
    public $keyValueInfos;

    /**
     * @var int
     */
    public $orgHeight;

    /**
     * @var int
     */
    public $orgWidth;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'angle' => 'Angle',
        'content' => 'Content',
        'height' => 'Height',
        'keyValueInfos' => 'KeyValueInfos',
        'orgHeight' => 'OrgHeight',
        'orgWidth' => 'OrgWidth',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->keyValueInfos)) {
            Model::validateArray($this->keyValueInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->keyValueInfos) {
            if (\is_array($this->keyValueInfos)) {
                $res['KeyValueInfos'] = [];
                $n1 = 0;
                foreach ($this->keyValueInfos as $item1) {
                    $res['KeyValueInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orgHeight) {
            $res['OrgHeight'] = $this->orgHeight;
        }

        if (null !== $this->orgWidth) {
            $res['OrgWidth'] = $this->orgWidth;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }

        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['KeyValueInfos'])) {
            if (!empty($map['KeyValueInfos'])) {
                $model->keyValueInfos = [];
                $n1 = 0;
                foreach ($map['KeyValueInfos'] as $item1) {
                    $model->keyValueInfos[$n1] = keyValueInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrgHeight'])) {
            $model->orgHeight = $map['OrgHeight'];
        }

        if (isset($map['OrgWidth'])) {
            $model->orgWidth = $map['OrgWidth'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
