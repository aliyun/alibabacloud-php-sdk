<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\waterMarkList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\waterMarkList\waterMark\inputFile;
use AlibabaCloud\Tea\Model;

class waterMark extends Model
{
    /**
     * @var string
     */
    public $waterMarkTemplateId;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $dx;

    /**
     * @var string
     */
    public $dy;

    /**
     * @var string
     */
    public $referPos;

    /**
     * @var string
     */
    public $type;

    /**
     * @var inputFile
     */
    public $inputFile;
    protected $_name = [
        'waterMarkTemplateId' => 'WaterMarkTemplateId',
        'width'               => 'Width',
        'height'              => 'Height',
        'dx'                  => 'Dx',
        'dy'                  => 'Dy',
        'referPos'            => 'ReferPos',
        'type'                => 'Type',
        'inputFile'           => 'InputFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->waterMarkTemplateId) {
            $res['WaterMarkTemplateId'] = $this->waterMarkTemplateId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return waterMark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WaterMarkTemplateId'])) {
            $model->waterMarkTemplateId = $map['WaterMarkTemplateId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }

        return $model;
    }
}
