<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\FileForReq\figures;
use AlibabaCloud\Tea\Model;

class FileForReq extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var figures[]
     */
    public $figures;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $OSSURI;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'contentType'  => 'ContentType',
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'figures'      => 'Figures',
        'fileHash'     => 'FileHash',
        'mediaType'    => 'MediaType',
        'OSSURI'       => 'OSSURI',
        'URI'          => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->figures) {
            $res['Figures'] = [];
            if (null !== $this->figures && \is_array($this->figures)) {
                $n = 0;
                foreach ($this->figures as $item) {
                    $res['Figures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->OSSURI) {
            $res['OSSURI'] = $this->OSSURI;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileForReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['Figures'])) {
            if (!empty($map['Figures'])) {
                $model->figures = [];
                $n              = 0;
                foreach ($map['Figures'] as $item) {
                    $model->figures[$n++] = null !== $item ? figures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['OSSURI'])) {
            $model->OSSURI = $map['OSSURI'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
