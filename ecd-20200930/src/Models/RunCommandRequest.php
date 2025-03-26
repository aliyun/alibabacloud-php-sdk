<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class RunCommandRequest extends Model
{
    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'contentEncoding' => 'ContentEncoding',
        'desktopId' => 'DesktopId',
        'endUserId' => 'EndUserId',
        'regionId' => 'RegionId',
        'timeout' => 'Timeout',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
