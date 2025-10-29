<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageScrapeBody;

use AlibabaCloud\Dara\Model;

class readability extends Model
{
    /**
     * @var bool
     */
    public $excludeAllImages;

    /**
     * @var bool
     */
    public $excludeAllLinks;

    /**
     * @var string[]
     */
    public $excludedTags;

    /**
     * @var string
     */
    public $readabilityMode;
    protected $_name = [
        'excludeAllImages' => 'excludeAllImages',
        'excludeAllLinks' => 'excludeAllLinks',
        'excludedTags' => 'excludedTags',
        'readabilityMode' => 'readabilityMode',
    ];

    public function validate()
    {
        if (\is_array($this->excludedTags)) {
            Model::validateArray($this->excludedTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeAllImages) {
            $res['excludeAllImages'] = $this->excludeAllImages;
        }

        if (null !== $this->excludeAllLinks) {
            $res['excludeAllLinks'] = $this->excludeAllLinks;
        }

        if (null !== $this->excludedTags) {
            if (\is_array($this->excludedTags)) {
                $res['excludedTags'] = [];
                $n1 = 0;
                foreach ($this->excludedTags as $item1) {
                    $res['excludedTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->readabilityMode) {
            $res['readabilityMode'] = $this->readabilityMode;
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
        if (isset($map['excludeAllImages'])) {
            $model->excludeAllImages = $map['excludeAllImages'];
        }

        if (isset($map['excludeAllLinks'])) {
            $model->excludeAllLinks = $map['excludeAllLinks'];
        }

        if (isset($map['excludedTags'])) {
            if (!empty($map['excludedTags'])) {
                $model->excludedTags = [];
                $n1 = 0;
                foreach ($map['excludedTags'] as $item1) {
                    $model->excludedTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['readabilityMode'])) {
            $model->readabilityMode = $map['readabilityMode'];
        }

        return $model;
    }
}
