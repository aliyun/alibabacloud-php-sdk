<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Consolecs\V20160406\Models\ListConsoleProductResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $belongedCategory;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string[]
     */
    public $channelLinks;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $pinyin;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $relatedConsoleAppId;

    /**
     * @var string
     */
    public $relatedPipId;

    /**
     * @var bool
     */
    public $showInNav;

    /**
     * @var string[]
     */
    public $supportedAccounts;

    /**
     * @var string[]
     */
    public $supportedChannels;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagExpireTime;
    protected $_name = [
        'belongedCategory' => 'BelongedCategory',
        'categories' => 'Categories',
        'channelLinks' => 'ChannelLinks',
        'docId' => 'DocId',
        'keywords' => 'Keywords',
        'names' => 'Names',
        'pinyin' => 'Pinyin',
        'productId' => 'ProductId',
        'relatedConsoleAppId' => 'RelatedConsoleAppId',
        'relatedPipId' => 'RelatedPipId',
        'showInNav' => 'ShowInNav',
        'supportedAccounts' => 'SupportedAccounts',
        'supportedChannels' => 'SupportedChannels',
        'tag' => 'Tag',
        'tagExpireTime' => 'TagExpireTime',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->channelLinks)) {
            Model::validateArray($this->channelLinks);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        if (\is_array($this->supportedAccounts)) {
            Model::validateArray($this->supportedAccounts);
        }
        if (\is_array($this->supportedChannels)) {
            Model::validateArray($this->supportedChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongedCategory) {
            $res['BelongedCategory'] = $this->belongedCategory;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelLinks) {
            if (\is_array($this->channelLinks)) {
                $res['ChannelLinks'] = [];
                $n1 = 0;
                foreach ($this->channelLinks as $item1) {
                    $res['ChannelLinks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        if (null !== $this->pinyin) {
            $res['Pinyin'] = $this->pinyin;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->relatedConsoleAppId) {
            $res['RelatedConsoleAppId'] = $this->relatedConsoleAppId;
        }

        if (null !== $this->relatedPipId) {
            $res['RelatedPipId'] = $this->relatedPipId;
        }

        if (null !== $this->showInNav) {
            $res['ShowInNav'] = $this->showInNav;
        }

        if (null !== $this->supportedAccounts) {
            if (\is_array($this->supportedAccounts)) {
                $res['SupportedAccounts'] = [];
                $n1 = 0;
                foreach ($this->supportedAccounts as $item1) {
                    $res['SupportedAccounts'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportedChannels) {
            if (\is_array($this->supportedChannels)) {
                $res['SupportedChannels'] = [];
                $n1 = 0;
                foreach ($this->supportedChannels as $item1) {
                    $res['SupportedChannels'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tagExpireTime) {
            $res['TagExpireTime'] = $this->tagExpireTime;
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
        if (isset($map['BelongedCategory'])) {
            $model->belongedCategory = $map['BelongedCategory'];
        }

        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelLinks'])) {
            if (!empty($map['ChannelLinks'])) {
                $model->channelLinks = [];
                $n1 = 0;
                foreach ($map['ChannelLinks'] as $item1) {
                    $model->channelLinks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        if (isset($map['Pinyin'])) {
            $model->pinyin = $map['Pinyin'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RelatedConsoleAppId'])) {
            $model->relatedConsoleAppId = $map['RelatedConsoleAppId'];
        }

        if (isset($map['RelatedPipId'])) {
            $model->relatedPipId = $map['RelatedPipId'];
        }

        if (isset($map['ShowInNav'])) {
            $model->showInNav = $map['ShowInNav'];
        }

        if (isset($map['SupportedAccounts'])) {
            if (!empty($map['SupportedAccounts'])) {
                $model->supportedAccounts = [];
                $n1 = 0;
                foreach ($map['SupportedAccounts'] as $item1) {
                    $model->supportedAccounts[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupportedChannels'])) {
            if (!empty($map['SupportedChannels'])) {
                $model->supportedChannels = [];
                $n1 = 0;
                foreach ($map['SupportedChannels'] as $item1) {
                    $model->supportedChannels[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TagExpireTime'])) {
            $model->tagExpireTime = $map['TagExpireTime'];
        }

        return $model;
    }
}
