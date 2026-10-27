<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\PreviewNotifyTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $failed;

    /**
     * @var mixed[]
     */
    public $success;
    protected $_name = [
        'failed' => 'failed',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->failed)) {
            Model::validateArray($this->failed);
        }
        if (\is_array($this->success)) {
            Model::validateArray($this->success);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            if (\is_array($this->failed)) {
                $res['failed'] = [];
                foreach ($this->failed as $key1 => $value1) {
                    $res['failed'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->success) {
            if (\is_array($this->success)) {
                $res['success'] = [];
                foreach ($this->success as $key1 => $value1) {
                    $res['success'][$key1] = $value1;
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
        if (isset($map['failed'])) {
            if (!empty($map['failed'])) {
                $model->failed = [];
                foreach ($map['failed'] as $key1 => $value1) {
                    $model->failed[$key1] = $value1;
                }
            }
        }

        if (isset($map['success'])) {
            if (!empty($map['success'])) {
                $model->success = [];
                foreach ($map['success'] as $key1 => $value1) {
                    $model->success[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
