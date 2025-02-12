<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppStreamingOutTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string[]
     */
    public $layoutIds;
    /**
     * @var int
     */
    public $mediaEncode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'layoutIds'   => 'LayoutIds',
        'mediaEncode' => 'MediaEncode',
        'name'        => 'Name',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->layoutIds)) {
            Model::validateArray($this->layoutIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->layoutIds) {
            if (\is_array($this->layoutIds)) {
                $res['LayoutIds'] = [];
                $n1               = 0;
                foreach ($this->layoutIds as $item1) {
                    $res['LayoutIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = [];
                $n1               = 0;
                foreach ($map['LayoutIds'] as $item1) {
                    $model->layoutIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
