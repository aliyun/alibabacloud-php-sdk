<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PreloadCachesRequest extends Model
{
    /**
     * @var string[]
     */
    public $content;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'content' => 'Content',
        'headers' => 'Headers',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['Headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                foreach ($map['Headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
