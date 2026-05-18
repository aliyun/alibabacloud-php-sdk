<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UploadDocumentRequest extends Model
{
    /**
     * @var int
     */
    public $chunkOverlap;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documentLoaderName;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string[]
     */
    public $separators;

    /**
     * @var string
     */
    public $splitterModel;

    /**
     * @var string
     */
    public $textSplitterName;

    /**
     * @var bool
     */
    public $vlEnhance;

    /**
     * @var bool
     */
    public $zhTitleEnhance;
    protected $_name = [
        'chunkOverlap' => 'ChunkOverlap',
        'chunkSize' => 'ChunkSize',
        'description' => 'Description',
        'documentLoaderName' => 'DocumentLoaderName',
        'fileName' => 'FileName',
        'kbUuid' => 'KbUuid',
        'location' => 'Location',
        'separators' => 'Separators',
        'splitterModel' => 'SplitterModel',
        'textSplitterName' => 'TextSplitterName',
        'vlEnhance' => 'VlEnhance',
        'zhTitleEnhance' => 'ZhTitleEnhance',
    ];

    public function validate()
    {
        if (\is_array($this->separators)) {
            Model::validateArray($this->separators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkOverlap) {
            $res['ChunkOverlap'] = $this->chunkOverlap;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->documentLoaderName) {
            $res['DocumentLoaderName'] = $this->documentLoaderName;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->separators) {
            if (\is_array($this->separators)) {
                $res['Separators'] = [];
                $n1 = 0;
                foreach ($this->separators as $item1) {
                    $res['Separators'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->splitterModel) {
            $res['SplitterModel'] = $this->splitterModel;
        }

        if (null !== $this->textSplitterName) {
            $res['TextSplitterName'] = $this->textSplitterName;
        }

        if (null !== $this->vlEnhance) {
            $res['VlEnhance'] = $this->vlEnhance;
        }

        if (null !== $this->zhTitleEnhance) {
            $res['ZhTitleEnhance'] = $this->zhTitleEnhance;
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
        if (isset($map['ChunkOverlap'])) {
            $model->chunkOverlap = $map['ChunkOverlap'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DocumentLoaderName'])) {
            $model->documentLoaderName = $map['DocumentLoaderName'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Separators'])) {
            if (!empty($map['Separators'])) {
                $model->separators = [];
                $n1 = 0;
                foreach ($map['Separators'] as $item1) {
                    $model->separators[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SplitterModel'])) {
            $model->splitterModel = $map['SplitterModel'];
        }

        if (isset($map['TextSplitterName'])) {
            $model->textSplitterName = $map['TextSplitterName'];
        }

        if (isset($map['VlEnhance'])) {
            $model->vlEnhance = $map['VlEnhance'];
        }

        if (isset($map['ZhTitleEnhance'])) {
            $model->zhTitleEnhance = $map['ZhTitleEnhance'];
        }

        return $model;
    }
}
