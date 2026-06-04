<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\RenewAppSandboxResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string[]
     */
    public $previewUrls;
    protected $_name = [
        'previewUrls' => 'PreviewUrls',
    ];

    public function validate()
    {
        if (\is_array($this->previewUrls)) {
            Model::validateArray($this->previewUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->previewUrls) {
            if (\is_array($this->previewUrls)) {
                $res['PreviewUrls'] = [];
                foreach ($this->previewUrls as $key1 => $value1) {
                    $res['PreviewUrls'][$key1] = $value1;
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
        if (isset($map['PreviewUrls'])) {
            if (!empty($map['PreviewUrls'])) {
                $model->previewUrls = [];
                foreach ($map['PreviewUrls'] as $key1 => $value1) {
                    $model->previewUrls[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
