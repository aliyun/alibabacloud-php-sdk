<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\waterMarkList;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\waterMarkList\waterMark\inputFile;
use AlibabaCloud\Tea\Model;

class waterMark extends Model
{
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
    public $height;

    /**
     * @var inputFile
     */
    public $inputFile;

    /**
     * @var string
     */
    public $referPos;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $waterMarkTemplateId;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'dx'                  => 'Dx',
        'dy'                  => 'Dy',
        'height'              => 'Height',
        'inputFile'           => 'InputFile',
        'referPos'            => 'ReferPos',
        'type'                => 'Type',
        'waterMarkTemplateId' => 'WaterMarkTemplateId',
        'width'               => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toMap() : null;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->waterMarkTemplateId) {
            $res['WaterMarkTemplateId'] = $this->waterMarkTemplateId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = inputFile::fromMap($map['InputFile']);
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WaterMarkTemplateId'])) {
            $model->waterMarkTemplateId = $map['WaterMarkTemplateId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
