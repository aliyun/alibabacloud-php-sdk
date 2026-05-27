<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAIStaffPreviewUrlResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string[]
     */
    public $urlMap;
    protected $_name = [
        'urlMap' => 'UrlMap',
    ];

    public function validate()
    {
        if (\is_array($this->urlMap)) {
            Model::validateArray($this->urlMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->urlMap) {
            if (\is_array($this->urlMap)) {
                $res['UrlMap'] = [];
                foreach ($this->urlMap as $key1 => $value1) {
                    $res['UrlMap'][$key1] = $value1;
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
        if (isset($map['UrlMap'])) {
            if (!empty($map['UrlMap'])) {
                $model->urlMap = [];
                foreach ($map['UrlMap'] as $key1 => $value1) {
                    $model->urlMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
