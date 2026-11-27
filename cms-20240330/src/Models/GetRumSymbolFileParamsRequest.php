<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetRumSymbolFileParamsRequest extends Model
{
    /**
     * @var string
     */
    public $debugId;

    /**
     * @var string
     */
    public $fileKind;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'debugId' => 'debugId',
        'fileKind' => 'fileKind',
        'fileName' => 'fileName',
        'serviceId' => 'serviceId',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debugId) {
            $res['debugId'] = $this->debugId;
        }

        if (null !== $this->fileKind) {
            $res['fileKind'] = $this->fileKind;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['debugId'])) {
            $model->debugId = $map['debugId'];
        }

        if (isset($map['fileKind'])) {
            $model->fileKind = $map['fileKind'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
