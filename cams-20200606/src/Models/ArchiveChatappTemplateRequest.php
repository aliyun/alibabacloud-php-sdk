<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ArchiveChatappTemplateRequest\templateList;

class ArchiveChatappTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $archiveType;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var templateList[]
     */
    public $templateList;
    protected $_name = [
        'archiveType' => 'ArchiveType',
        'channelType' => 'ChannelType',
        'custSpaceId' => 'CustSpaceId',
        'templateList' => 'TemplateList',
    ];

    public function validate()
    {
        if (\is_array($this->templateList)) {
            Model::validateArray($this->templateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveType) {
            $res['ArchiveType'] = $this->archiveType;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->templateList) {
            if (\is_array($this->templateList)) {
                $res['TemplateList'] = [];
                $n1 = 0;
                foreach ($this->templateList as $item1) {
                    $res['TemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ArchiveType'])) {
            $model->archiveType = $map['ArchiveType'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['TemplateList'])) {
            if (!empty($map['TemplateList'])) {
                $model->templateList = [];
                $n1 = 0;
                foreach ($map['TemplateList'] as $item1) {
                    $model->templateList[$n1] = templateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
