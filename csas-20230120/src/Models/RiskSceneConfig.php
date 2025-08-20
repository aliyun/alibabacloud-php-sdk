<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class RiskSceneConfig extends Model
{
    /**
     * @var string[]
     */
    public $detectChannel;

    /**
     * @var string[]
     */
    public $officeChannel;
    protected $_name = [
        'detectChannel' => 'DetectChannel',
        'officeChannel' => 'OfficeChannel',
    ];

    public function validate()
    {
        if (\is_array($this->detectChannel)) {
            Model::validateArray($this->detectChannel);
        }
        if (\is_array($this->officeChannel)) {
            Model::validateArray($this->officeChannel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectChannel) {
            if (\is_array($this->detectChannel)) {
                $res['DetectChannel'] = [];
                $n1 = 0;
                foreach ($this->detectChannel as $item1) {
                    $res['DetectChannel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->officeChannel) {
            if (\is_array($this->officeChannel)) {
                $res['OfficeChannel'] = [];
                $n1 = 0;
                foreach ($this->officeChannel as $item1) {
                    $res['OfficeChannel'][$n1] = $item1;
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
        if (isset($map['DetectChannel'])) {
            if (!empty($map['DetectChannel'])) {
                $model->detectChannel = [];
                $n1 = 0;
                foreach ($map['DetectChannel'] as $item1) {
                    $model->detectChannel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OfficeChannel'])) {
            if (!empty($map['OfficeChannel'])) {
                $model->officeChannel = [];
                $n1 = 0;
                foreach ($map['OfficeChannel'] as $item1) {
                    $model->officeChannel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
