<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppResponseBody\resultObj;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $checkRequirements;

    /**
     * @var mixed[]
     */
    public $extInfoMap;

    /**
     * @var string
     */
    public $objectDescription;

    /**
     * @var string
     */
    public $photoShowThingsCnt;

    /**
     * @var string
     */
    public $processRequirements;

    /**
     * @var string
     */
    public $uploadRequirements;

    /**
     * @var string
     */
    public $videoNumber;
    protected $_name = [
        'checkRequirements'   => 'CheckRequirements',
        'extInfoMap'          => 'ExtInfoMap',
        'objectDescription'   => 'ObjectDescription',
        'photoShowThingsCnt'  => 'PhotoShowThingsCnt',
        'processRequirements' => 'ProcessRequirements',
        'uploadRequirements'  => 'UploadRequirements',
        'videoNumber'         => 'VideoNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRequirements) {
            $res['CheckRequirements'] = $this->checkRequirements;
        }
        if (null !== $this->extInfoMap) {
            $res['ExtInfoMap'] = $this->extInfoMap;
        }
        if (null !== $this->objectDescription) {
            $res['ObjectDescription'] = $this->objectDescription;
        }
        if (null !== $this->photoShowThingsCnt) {
            $res['PhotoShowThingsCnt'] = $this->photoShowThingsCnt;
        }
        if (null !== $this->processRequirements) {
            $res['ProcessRequirements'] = $this->processRequirements;
        }
        if (null !== $this->uploadRequirements) {
            $res['UploadRequirements'] = $this->uploadRequirements;
        }
        if (null !== $this->videoNumber) {
            $res['VideoNumber'] = $this->videoNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckRequirements'])) {
            $model->checkRequirements = $map['CheckRequirements'];
        }
        if (isset($map['ExtInfoMap'])) {
            $model->extInfoMap = $map['ExtInfoMap'];
        }
        if (isset($map['ObjectDescription'])) {
            $model->objectDescription = $map['ObjectDescription'];
        }
        if (isset($map['PhotoShowThingsCnt'])) {
            $model->photoShowThingsCnt = $map['PhotoShowThingsCnt'];
        }
        if (isset($map['ProcessRequirements'])) {
            $model->processRequirements = $map['ProcessRequirements'];
        }
        if (isset($map['UploadRequirements'])) {
            $model->uploadRequirements = $map['UploadRequirements'];
        }
        if (isset($map['VideoNumber'])) {
            $model->videoNumber = $map['VideoNumber'];
        }

        return $model;
    }
}
