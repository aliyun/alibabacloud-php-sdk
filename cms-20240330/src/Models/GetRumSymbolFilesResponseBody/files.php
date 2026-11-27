<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetRumSymbolFilesResponseBody;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $artifactPath;

    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string[]
     */
    public $matchedKeywords;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'artifactPath' => 'artifactPath',
        'artifactType' => 'artifactType',
        'fileName' => 'fileName',
        'matchedKeywords' => 'matchedKeywords',
        'platform' => 'platform',
        'size' => 'size',
        'source' => 'source',
        'updateTime' => 'updateTime',
        'uuid' => 'uuid',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->matchedKeywords)) {
            Model::validateArray($this->matchedKeywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactPath) {
            $res['artifactPath'] = $this->artifactPath;
        }

        if (null !== $this->artifactType) {
            $res['artifactType'] = $this->artifactType;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->matchedKeywords) {
            if (\is_array($this->matchedKeywords)) {
                $res['matchedKeywords'] = [];
                $n1 = 0;
                foreach ($this->matchedKeywords as $item1) {
                    $res['matchedKeywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['artifactPath'])) {
            $model->artifactPath = $map['artifactPath'];
        }

        if (isset($map['artifactType'])) {
            $model->artifactType = $map['artifactType'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['matchedKeywords'])) {
            if (!empty($map['matchedKeywords'])) {
                $model->matchedKeywords = [];
                $n1 = 0;
                foreach ($map['matchedKeywords'] as $item1) {
                    $model->matchedKeywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
