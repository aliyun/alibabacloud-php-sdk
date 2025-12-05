<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class ReEncryptRequest extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var mixed[]
     */
    public $destinationEncryptionContext;

    /**
     * @var string
     */
    public $destinationKeyId;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $sourceEncryptionAlgorithm;

    /**
     * @var mixed[]
     */
    public $sourceEncryptionContext;

    /**
     * @var string
     */
    public $sourceKeyId;

    /**
     * @var string
     */
    public $sourceKeyVersionId;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'destinationEncryptionContext' => 'DestinationEncryptionContext',
        'destinationKeyId' => 'DestinationKeyId',
        'dryRun' => 'DryRun',
        'sourceEncryptionAlgorithm' => 'SourceEncryptionAlgorithm',
        'sourceEncryptionContext' => 'SourceEncryptionContext',
        'sourceKeyId' => 'SourceKeyId',
        'sourceKeyVersionId' => 'SourceKeyVersionId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationEncryptionContext)) {
            Model::validateArray($this->destinationEncryptionContext);
        }
        if (\is_array($this->sourceEncryptionContext)) {
            Model::validateArray($this->sourceEncryptionContext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }

        if (null !== $this->destinationEncryptionContext) {
            if (\is_array($this->destinationEncryptionContext)) {
                $res['DestinationEncryptionContext'] = [];
                foreach ($this->destinationEncryptionContext as $key1 => $value1) {
                    $res['DestinationEncryptionContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->destinationKeyId) {
            $res['DestinationKeyId'] = $this->destinationKeyId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->sourceEncryptionAlgorithm) {
            $res['SourceEncryptionAlgorithm'] = $this->sourceEncryptionAlgorithm;
        }

        if (null !== $this->sourceEncryptionContext) {
            if (\is_array($this->sourceEncryptionContext)) {
                $res['SourceEncryptionContext'] = [];
                foreach ($this->sourceEncryptionContext as $key1 => $value1) {
                    $res['SourceEncryptionContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceKeyId) {
            $res['SourceKeyId'] = $this->sourceKeyId;
        }

        if (null !== $this->sourceKeyVersionId) {
            $res['SourceKeyVersionId'] = $this->sourceKeyVersionId;
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
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }

        if (isset($map['DestinationEncryptionContext'])) {
            if (!empty($map['DestinationEncryptionContext'])) {
                $model->destinationEncryptionContext = [];
                foreach ($map['DestinationEncryptionContext'] as $key1 => $value1) {
                    $model->destinationEncryptionContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['DestinationKeyId'])) {
            $model->destinationKeyId = $map['DestinationKeyId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['SourceEncryptionAlgorithm'])) {
            $model->sourceEncryptionAlgorithm = $map['SourceEncryptionAlgorithm'];
        }

        if (isset($map['SourceEncryptionContext'])) {
            if (!empty($map['SourceEncryptionContext'])) {
                $model->sourceEncryptionContext = [];
                foreach ($map['SourceEncryptionContext'] as $key1 => $value1) {
                    $model->sourceEncryptionContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['SourceKeyId'])) {
            $model->sourceKeyId = $map['SourceKeyId'];
        }

        if (isset($map['SourceKeyVersionId'])) {
            $model->sourceKeyVersionId = $map['SourceKeyVersionId'];
        }

        return $model;
    }
}
