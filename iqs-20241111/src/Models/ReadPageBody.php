<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageBody\readability;

class ReadPageBody extends Model
{
    /**
     * @var string[]
     */
    public $formats;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $maxAge;

    /**
     * @var int
     */
    public $pageTimeout;

    /**
     * @var readability
     */
    public $readability;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'formats' => 'formats',
        'location' => 'location',
        'maxAge' => 'maxAge',
        'pageTimeout' => 'pageTimeout',
        'readability' => 'readability',
        'timeout' => 'timeout',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->formats)) {
            Model::validateArray($this->formats);
        }
        if (null !== $this->readability) {
            $this->readability->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formats) {
            if (\is_array($this->formats)) {
                $res['formats'] = [];
                $n1 = 0;
                foreach ($this->formats as $item1) {
                    $res['formats'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->maxAge) {
            $res['maxAge'] = $this->maxAge;
        }

        if (null !== $this->pageTimeout) {
            $res['pageTimeout'] = $this->pageTimeout;
        }

        if (null !== $this->readability) {
            $res['readability'] = null !== $this->readability ? $this->readability->toArray($noStream) : $this->readability;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['formats'])) {
            if (!empty($map['formats'])) {
                $model->formats = [];
                $n1 = 0;
                foreach ($map['formats'] as $item1) {
                    $model->formats[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['maxAge'])) {
            $model->maxAge = $map['maxAge'];
        }

        if (isset($map['pageTimeout'])) {
            $model->pageTimeout = $map['pageTimeout'];
        }

        if (isset($map['readability'])) {
            $model->readability = readability::fromMap($map['readability']);
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
